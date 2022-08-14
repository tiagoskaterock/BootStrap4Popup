<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" id="botao-popup" style="position: fixed; left: -1000000px; top: -10000000px;">
  Open Modal
</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <a href="javascript:void(0)">
          <img src="https://cdn.pixabay.com/photo/2015/06/19/21/24/avenue-815297_960_720.jpg" alt="nature" style="width: 100%">
        </a>
      </div>
    </div>

  </div>
</div>

<script>
  // carregada a página
  document.addEventListener("DOMContentLoaded", function() {
    // aguarda 2 segundos
    setTimeout(function(){
      document.getElementById('botao-popup').click()
    }, 2000);
    // clica o botão que abre o popup
  });
</script>
