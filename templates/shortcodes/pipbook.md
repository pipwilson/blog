{% set pipbook = load_data(
    url=config.extra.base_services_url~"pip_save_book.php",
    format="plain",
    content_type="text/plain",
    method="POST",
    body='{ "page": "'~page.permalink~'", "text": "'~body~'" }')
%}

<h1>yay i am a book!</h1>

{{ body }}