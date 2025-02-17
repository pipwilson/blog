{% set pipbook = load_data(
    url="https://philwilson.org/services/pip_save_book.php",
    format="plain",
    content_type="text/plain",
    method="POST",
    body='{"text":"'~body~'"}')
%}

<pre>{{ pipbook }}</pre>
{{ body }}