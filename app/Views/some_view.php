<?= $this->extend('default') ?>

<?= $this->section('content') ?>



    <div class="container">
      <div class="row">
        <div class="col-4 txt-center">
          <div class="card text-center" style="width: 18rem; background-color: #29DB01;">
            <div class="card-body">
              <strong> <p style="font-size: 16px;">Saldo atual:</p> </strong>
                <h5 class="card-title" id="saldo">R$ </h5>
            </div>
          </div>
        </div>
        <div class="col-4 txt-center">
          <div class="card text-center" style="width: 18rem; background-color: #FF0105;">
            <div class="card-body">
            <strong> <p style="font-size: 16px;">Média de valor de saída: </p> </strong>
              <h5 class="card-title" id="mediaSaida">R$ </h5>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card text-center" style="width: 18rem; background-color: #1567FF;">
           <div class="card-body">
           <strong> <p style="font-size: 16px;">Média de valor de entrada:</p> </strong>
            <h5 class="card-title" id="mediaEntrada">R$ </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <?= $this->section('javascript') ?>
       let a = 'a';
    <?= $this->endSection() ?>
<?= $this->endSection() ?>