<ul class="site-menu">
    <li><a href="index.php">Main</a></li>
    <li><a href="about.php">About</a></li>
    {if $isLogged}
       <li><a href="include/logout.php">Logout</a></li>
    {else}
      <li><a href="login.php">Login</a></li>
      <li><a href="registration.php">Registration</a></li>
    {/if}
</ul>