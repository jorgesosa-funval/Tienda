<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    a {
        text-decoration: none;
        color: black;

    }

    ul {
        display: flex;
        flex-direction: column;
        gap: 24px;
        font-size: 1.2rem;
        font-weight: 600;
        
    }

    li {
        list-style: none;
    }
    section{
        
        padding: 24px;
        padding-top: 65px;
        min-height: 100vh;
        background-color: #f2f2f2;
        width: 280px;
    }
    header{
        display: flex;
        justify-content: end;
        align-items: center;
        height: 64px;
        width: calc(100% - 280px);
        position: absolute;
        right: 0;
        padding: 0 24px;
        background-color: #f2f2f2;
    }
    .userConatiner{
        display: flex;  
        align-items: center;
        gap: 24px
        ;
    }
    .fotoUsuario{
        width: 40px;
        height: 40px;
        background: salmon;
        border-radius: 100%;
    }
</style>
<header>
    <nav>
        <div class="userConatiner">
            <div class="fotoUsuario"></div>
            <h4>Nombre Usuario</h4>
        </div>
        <ul></ul>
    </nav>
</header>
<section >
    <ul >
        <li><a href="#">Shop</a></li>
        <li><a href="#">Mis Pedidos</a></li>
        <li><a href="#">Pedidos</a></li>
        <li><a href="#">Productos</a></li>
        <li><a href="#">Clientes</a></li>
        <li><a href="#">Usuarios</a></li>
    </ul>
</section>