{% set pipbook = load_data(
    url=config.extra.base_services_url ~ "pip_save_book.php",
    method="POST",
    content_type="text/plain",
    body=body,
    format="plain",
    required=true)
%}

{{ pipbook }}
{{ body }}