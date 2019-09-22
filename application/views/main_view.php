<div class="news">
    <h1>Новые предложения:</h1>

    <?php
        foreach($data as $swap_item)
        {
            $title = $swap_item['title'];
            $logo = $swap_item['logo'];
            $description = $swap_item['description'];
            $location = $swap_item['location'];

echo <<<SwapItem
            <div class="swap-item">
                <div class="swap-image-container">
                    <img class="swap-image" src="$logo" alt="Изображение товара">
                </div>
                <a class="swap-title" href="">$title</a>
                <div class="swap-line swap-description">$description</div>
                <div class="swap-line swap-location">$location</div>
            </div>'
SwapItem;
        }       
    ?>
</div>