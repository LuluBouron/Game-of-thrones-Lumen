@include('layout/header')
        <div class="wrapper">
            <section class="character-page">
                <div class="col-8">
                    <h2><?= $character->first_name . ' ' . $character->last_name ?></h2>
                    <div class="bio">
                        <h3>Biographie</h3>
                        <p>
                            <?= $character->biography ?>
                        </p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="avatar" style="background: #<?= $character->houses[0]->colour ?>;">
                        <img src="<?= url('assets/img/' . $character->image) ?>" alt="Catelyn">
                    </div>
                    <div class="infos">
                        <h3>Maisons</h3>
                        <div class="houses">
                            <ul>
                                <?php foreach($house as $currentHouse): ?>
                                <li class="house-logo" style="background: #<?= $currentHouse->colour ?>;">
                                    <a href="<?= route('house-item', ['id' =>  $currentHouse->id])?>">
                                        <img src="<?= url('assets/img/houses/' . $currentHouse->image) ?>" alt="<?= $currentHouse->name ?>">
                                    </a>
                                </li>
                                <?php endforeach;?>

                            </ul>
                        </div>
                        <ul class="meta">
                            <li><span>Rang : </span>
                            <?= $title->name ?></li>
                            <li>

                            <span>Mère : </span>
                            <?php if(empty($mother)):?>
                                Non renseigné
                                <?php else : ?>
                                <?= $mother->first_name . ' ' . $mother->last_name ?>
                                <?php endif;?>
                            </li>
                            <li><span>Père : </span>
                            <?php if(empty($father)):?>
                                Non renseigné
                                <?php else : ?>
                                <?= $father->first_name . ' ' . $father->last_name ?>
                                <?php endif;?>

                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    @include('layout/footer')
