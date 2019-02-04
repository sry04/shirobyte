    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
          $('#users').DataTable();

        });

      function deleteConfirm(url){
   	     $('#btn-delete').attr('href', url);
   	     $('#deleteModal').modal();
       }
    </script>
  </body>
</html>
