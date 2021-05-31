@include('layout/header')
        <div class="wrapper">
                <h2><?= $house->name?></h2>

   <ul class="characters-list">
    <?php foreach($characters as $currentCharacter):?>
            <li class="character-card">
            <a href="<?= route('character-item', ['id' =>  $currentCharacter->id])?>">

                <div class="avatar" style="background: #<?= $house->colour?>;">
                    <img src="<?= url('assets/img/' . $currentCharacter->image)?>" alt="<?= $currentCharacter->first_name?>">
                </div>
                <div class="name">
                    <?= $currentCharacter->first_name . ' ' . $currentCharacter->last_name ?>
                </div>
            </a>
        </li>
        <?php endforeach;?>


    </ul>        </div>
    </main>

</body></html>
