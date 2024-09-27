To get your Nginx server with PHP 8.3 up and running on WSL 2 Docker using the files you've provided, follow these steps:

1. Make sure you're in the correct directory where your `docker-compose.yml` file is located. It should be in the `/docker` folder.

2. Open a terminal in WSL 2 and navigate to the `/docker` directory:

   ```shell
   cd /path/to/your/docker/folder
   ```

3. Run the following command to build and start the containers:

   ```shell
   docker-compose up -d --build
   ```

   This command will:
   - Build the custom PHP image defined in your Dockerfile
   - Pull the Nginx image if it's not already present
   - Create and start the containers in detached mode (-d flag)

4. Once the process is complete, your services should be up and running. You can verify this by running:

   ```shell
   docker-compose ps
   ```

   This should show you two containers running: one for PHP (app) and one for Nginx.

5. To access your PHP info page, open a web browser and go to:

   ```shell
   http://localhost:8000
   ```

   You should see the PHP info page, which confirms that Nginx is serving your PHP files correctly.

Additional notes:

- If you make changes to your Dockerfile or need to rebuild the images, you can use:

  ```shell
  docker-compose up -d --build
  ```

- To stop the containers, run:

  ```shell
  docker-compose down
  ```

- If you need to view logs, you can use:

  ```shell
  docker-compose logs
  ```

  Or for a specific service:

  ```shell
  docker-compose logs app
  ```
  or
  ```shell
  docker-compose logs nginx
  ```

- Make sure your WSL 2 instance has Docker installed and running properly.

- If you encounter any permission issues, you might need to adjust the permissions of your `src` directory to ensure Docker can read/write to it.

Here’s the header in Markdown format:

### How to SSH into Docker and Run Composer Commands
To install Composer, it is done using `curl`. To run Composer commands, we need to SSH into the Docker container first. Follow these steps:

1. Navigate to the Docker directory:
   ```shell
   cd docker
   ```

2. Run the following command to list the Docker containers and identify the container's name:
   ```shell
   docker ps
   ```
   Copy the container name listed under the `NAMES` column.

3. To SSH into the desired Docker container, use the following command, replacing `oop-php-right-way-app` with the name of your container:
   ```shell
   docker exec -it <container_name> bash
   ```

4. Once inside the container, you can run any Composer commands. For example:
   ```shell
   composer install
   composer dump-autoload  # or 'composer du' to dump the autoload
   ```

### Docker Debugging

To forcefully delete containers along with their associated volumes and images, use the following command:

```bash
docker rm -vf $(docker ps -aq) && docker rmi -f $(docker images -aq)
```

This will remove all Docker instances. To start the containers fresh, run the following command to build and start them:

```bash
docker-compose up -d --build
```

These steps should get your Nginx server with PHP 8.3 up and running on WSL 2 Docker based on the configuration files you've provided. Let me know if you encounter any issues or need further clarification!