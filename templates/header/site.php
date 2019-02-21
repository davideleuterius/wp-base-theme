
<div class="flex-grid items-center justify-between pad site-wrap">
  <div class="w-25">
    <img class="site-logo" src="<?=ADIR?>/img/logo.jpg" alt="ElectricityRates.com">
  </div>
  <div class="w-50 pad-top">
    <div class="flex justify-end">
      <a class="header-icon" href="https://www.facebook.com/ElectricRates" target="_blank" rel="noopener">
        <img
        alt="Facebook" class="spc-right" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAfCAMAAADHso01AAAANlBMVEUAUpwAUqQHU54CWahDe7YAUpU7fLT+/v74+/6BqM/+/fYVZLDB1PWWutzl9PjE2eKyyPNIhJv/IgUfAAABCUlEQVR4XnWTAYrcQAwEq1vSjL27d0n+/9nYFoQw9hUCgwqpxYD5ypHjqEeSlCwkGkyjExgCAWrUsr8BaRDGB2CrkTGYISnUoAZBdxmACroFBtsYwJDCXXT1ikAo6NMQXfEeOd4F6h4DuQ+vEl/zYAQuXfzTEaCxHfaVgVi0VWh/zfn5PU6x6MJxaRv7pqWKPKNzBHDXUVfynBmYmxbzdcjX42nY8et7zu3zKeJBI/Zjt6Ect2wU2o9wSTaxaLB86RDW/TS4NIRQLdo6l2/9LMj3V+vTqiAelhvv2/YdBfdpUaF35p8Q1v/TSIgFIURr0EoHkggoVnwCuSxf6GnzzM/T3dt//kMz8y92TwdUxQIFNgAAAABJRU5ErkJggg==">
      </a>
      <a class="header-icon" href="https://twitter.com/electric_rates" target="_blank" rel="noopener">
        <img alt="Twitter"
        class="spc-right" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAfCAMAAADHso01AAAAQlBMVEVJxfhJzfRKxe9ExvdCzfb+/v501fX4+/7+/fZIx+eE4v6t7P1j1frr/PlY0vn39+/X4vrC6/nM/v524f7n7vub3/Q2acvaAAABIElEQVR4Xn3OZ47bQBCE0Qo9gVFx739V9ywoyxYgPrDAHx/YIOopJA/4YDtsnBhRiUkfOB7Bjl/+dBw/J3EQP4QYJGwkGx+M47gphwCGEAquwIRRDOUs0ZongwCfpbSf+aYjB2AHa5ttBu8ltbbUV/bImntZdsU6ai/l+v/XUy29tVudM/bSr/Q7C1Z9jqO9DK1c//01ynyUo/RLvhbgnaXc1srbPPGVSTnVcTmfsTaFjkyAtLlv2ba8Xi5l0TsLdkj82TKU7P06iXFkjcxJ9novqV+eO0I+Mg1b+2O5XfrI7b4bMo4ctiGty1b6VsqtKgIh/c2QmYu1PlYigMlBHNkGc84RCIEQ6Vc+JcRXzkHfWYK/AGAY/MJyWDhhGPXUH/RzC4TqsiWEAAAAAElFTkSuQmCC"
        >
      </a>
      <form action="/" class="search-form pos-rel" method="get" role="search">
          <label><span class="screen-reader-text">Search for:</span>
          <input class="search-field pad-sides" name="s"
          title="Search for:" type="search" value=""></label>
          <input class="search-submit" type="submit" value="Search">
      </form>
    </div>
  </div>
</div>
<?php
if ( !is_front_page() ): ?>

<div class="site-wrap pad zero-top">
  <nav class="site-menu">
    <ul class="flex-grid items-center justify-between list-flat fs-20">
      <li><a href="/">Home</a></li>
      <li><a href="/electricity-providers/">Electricity Providers</a></li>
      <li><a href="/locations/">Locations</a></li>
      <li><a href="/business-electricity/"> Business Electricity</a></li>
      <li><a href="/encyclopedia/">Encyclopedia</a></li>
      <li><a href="/electricity-news/">Electricity News</a></li>
    </ul>
  </nav>
</div>


<?php
endif;