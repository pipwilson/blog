import requests
import microdata
import hashlib
import cloudscraper
import argparse
import time  # Add this import

"""
The script retrieves a list of unprocessed URLs from the server, processes each URL to extract microdata,
and posts the microdata back to the server. The script uses the following functions:
    get_unprocessed_urls(base_url): Retrieves a list of unprocessed URLs from the server.
    process_urls(base_url): Processes each URL to retrieve and post microdata.
    save_microdata(url, data): Saves microdata to a JSON file.
    post_microdata(data, base_url): Posts microdata to the server.

The script can be run with the --production flag to use the production server.
Example: python save_microdata_from_urls.py --production
"""

def get_unprocessed_urls(base_url):
    url = f'{base_url}get_unprocessed_urls.php'
    response = requests.get(url)

    if response.status_code == 200:
        urls = response.text.splitlines()
        return urls
    else:
        print(f"Failed to retrieve URLs. Status code: {response.status_code}")
        return []

def save_microdata(url, data):
    sha1_hash = hashlib.sha1(url.encode()).hexdigest()
    filename = f"{sha1_hash}.json"
    with open(filename, 'w', encoding='utf-8') as file:
        file.write(data)

def post_microdata(data, base_url):
    post_url = f'{base_url}save_book_from_microdata.php'
    headers = {'Content-Type': 'application/json'}
    response = requests.post(post_url, data=data, headers=headers)
    if response.status_code == 200:
        print(f"Successfully posted microdata to {post_url}")
    else:
        print(f"Failed to post microdata. Status code: {response.status_code}")

def process_urls(base_url):
    urls = get_unprocessed_urls(base_url)
    print(f"Found {len(urls)} URLs to process")
    scraper = cloudscraper.create_scraper()
    for url in urls:
        response = scraper.get(url)
        if response.status_code == 200:
            html = response.text
            items = microdata.get_items(html)
            for item in items:
                post_microdata(item.json(), base_url)
                # save_microdata(url, item.json())
        else:
            print(f"Failed to retrieve URL: {url}. Status code: {response.status_code}")

        time.sleep(1)  # Wait one second after processing each URL

if __name__ == "__main__":
    parser = argparse.ArgumentParser(description='Process microdata from URLs.')
    parser.add_argument('--production', action='store_true', help='Use philwilson.org as the base URL')
    args = parser.parse_args()

    base_url = 'https://philwilson.org/services/' if args.production else 'http://localhost/'
    process_urls(base_url)
