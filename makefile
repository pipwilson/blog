# Default task
build: build_local
	@echo "Calling build_local for running locally"

books: build_local_books
	@echo "Calling the build task for running locally"

production: build_production
	@echo "Calling the build_production for running in production"

build_local:
	@echo "Deleting config.toml"
	rm -f config.toml
	@echo "Creating config.toml"
	cat config_local.toml config_common.toml > config.toml
	@echo "Running local dev server"
	zola serve

build_local_books:
	@echo "Deleting config.toml"
	rm -f config.toml
	@echo "Creating config.toml"
	cat config_local_books.toml config_common.toml > config.toml
	@echo "Running local dev server"
	zola build

build_production:
	@echo "Deleting config.toml"
	rm -f config.toml
	@echo "Creating config.toml"
	cat config_production.toml config_common.toml > config.toml
	@echo "Building website for production"
	zola build