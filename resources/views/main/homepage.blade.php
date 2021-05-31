
@include('layout.header')

        <div class="wrapper">

   <ul class="characters-list">

   <?php foreach($characters as $currentCharacter):

    ?>
            <li class="character-card">
            <a href="<?= route('character-item', ['id' =>  $currentCharacter->id])?>">

                <div class="avatar" style="background: #<?= $currentCharacter->houses[0]->colour ?>;">
                    <img src="<?= url('assets/img/' . $currentCharacter->image)?>" alt="<?= $currentCharacter->first_name?>">
                </div>
                <div class="name">
               <?= $currentCharacter->first_name . ' ' . $currentCharacter->last_name ?>

                </div>
            </a>
        </li>
        <?php endforeach;?>



    </ul>        </div>



