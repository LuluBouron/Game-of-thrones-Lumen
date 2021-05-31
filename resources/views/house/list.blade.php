@include('layout/header')
        <div class="wrapper">
                <ul class="houses-list">
                <?php foreach($houses as $currentHouse):?>
                    <li class="house-logo" style="background: #<?= $currentHouse->colour ?>;">
                <a href="<?= route('house-item', ['id' =>  $currentHouse->id])?>">
                    <img src="<?= url('assets/img/houses/' . $currentHouse->image) ?>" alt="<?= $currentHouse->name?>">
                </a>
            </li>
            <?php endforeach;?>

            </ul>
        </div>
    </main>

</body></html>
