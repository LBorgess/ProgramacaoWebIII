<script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<footer class="flex-shrink-0 py-4 mt-5 bg-dark text-white">
    <div class="container text-center">
        <small>Copyright &copy; Etecia</small>
    </div>
</footer>

<!-- jquery -->
<script>
    $(document).on('click', '.add', function(e) {
        var $el = $(this).closest('.erro').find('#erro')
        var erro = +$el.val();
        console.log(erro);
        $el.val(erro + 1);
    });
</script>

</body>
</html>