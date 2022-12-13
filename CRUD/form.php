
    <div class="container my-5">
        
        <form method="post">
            <div class="right">
        <div class="form-group  my-3">
            <label>Pavadinimas:</label>
            <input type="text" class="form-control" name="name" autocomplete="off" value="<?= ($edit)? $trip->name : "" ?>">   
        </div>
        <div class="form-group  my-3">
            <label>Mėnuo:</label>
            <input type="text" class="form-control" name="month" autocomplete="off" value="<?= ($edit)? $trip->month : "" ?>">   
        </div>
        <div class="form-group  my-3">
            <label>Žmoniu kiekis grupėje:</label>
            <input type="text" class="form-control" name="number" autocomplete="off" value="<?= ($edit)? $trip->number : "" ?>">   
        </div>
        <div class="form-group  my-3">
            <label>Distancijos ilgis:</label>
            <input type="text" class="form-control" name="distance" autocomplete="off" value="<?= ($edit)? $trip->distance : "" ?>">   
        </div>
        <div class="form-group  my-3">
            <label>Ar galima su gyvūnais?</label>
            <input type="text" class="form-control" placeholder="Įveskite TAIP arba NE" name="animals" autocomplete="off" value="<?= ($edit)? $trip->animals : "" ?>">   
        </div>
        
        <?php if($edit){ ?>
                    <input type="hidden" name="id" value="<?=$trip->id?>">
                    <button type="submit" name="update" class="btn btn-outline-dark mt-3 mb-3">Atnaujinti</button>
                <?php } else { ?>
                    <button type="submit" name="save" class="btn btn-outline-dark mt-3 mb-3">Išsaugoti</button>
                <?php } ?>
        </form>
    </div>
    </div>