{% set pipbook = load_data(
    url="http://localhost/pip_save_book.php",
    method="POST",
    content_type="text/plain",
    body=body,
    format="plain",
    required=true)
%}

{{ pipbook }}
{{ body }}