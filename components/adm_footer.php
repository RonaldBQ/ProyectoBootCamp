</div>
<section class="contenedor_pie">
    <div class="contenedor_2filas">
        <footer class=pie>
            &copy; 2021 Mi blog personal
        </footer>
    </div>
</section>

<script>
    var btn_user = document.getElementById('btn_user');
    btn_user.addEventListener('click', function() {
        var user_menu = document.getElementById('user_menu');
        if (user_menu.style.visibility == 'visible') {
            user_menu.style.visibility = "hidden";
        } else {
            user_menu.style.visibility = "visible";
        }
    });
</script>
</body>

</html>