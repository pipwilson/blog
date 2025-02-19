import requests
import microdata
import hashlib
import cloudscraper

def get_unprocessed_urls():
    url = 'http://localhost/get_unprocessed_urls.php'  # Update with the correct URL
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

def process_urls():
    urls = get_unprocessed_urls()
    scraper = cloudscraper.create_scraper()
    for url in urls:
        response = scraper.get(url)
        if response.status_code == 200:
            html = response.text
            items = microdata.get_items(html)
            for item in items:
                save_microdata(url, item.json())
        else:
            print(f"Failed to retrieve URL: {url}. Status code: {response.status_code}")

# Example usage
process_urls()
