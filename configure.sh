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

echo "Finished setting up authorization 🚀🚀🚀"
