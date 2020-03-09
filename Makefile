run: ## Run application with docker
	docker-compose down && docker-compose up --build php
test: ## Run all unit tests
	docker-compose down && docker-compose up --build tests
