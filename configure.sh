echo "Copying .env.example"
cp .env.example .env

echo "Setting up authorization 🔓🔓🔓"


#Reset the cache
while true; do
    read -p "Do you wish to clear the cache?" yn
    case $yn in
        [Yy]* ) php artisan permission:cache-reset; break;;
        [Nn]* ) break ;;
        * ) echo "Please answer yes or no.";;
    esac
done

php artisan permission:create-role student
php artisan permission:create-role admin

php artisan db:seed
php artisan db:seed AdminSeeder::class
echo "Finished setting up authorization 🚀🚀🚀"
