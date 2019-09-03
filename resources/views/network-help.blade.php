@include('includes.base-dom/1-title-links')
<link href="{{ asset('css/key-value-list.css') }}" rel="stylesheet">

@include('includes.menu_report')
@include('includes.base-dom/2-wrap-div')

<!-- Left Column -->
<div class="w3-col m2">
  <br>
  <!-- End Left Column -->
</div>

<!-- Middle Column -->
<div class="w3-col m8">
  <div class="w3-container w3-card w3-white w3-round w3-margin"><br>

    <h2>
      Help

    </h2>
    <h3>Overview</h3>
    <ul>
      <li>Shortcodes
        <ul>
          <li>
            Getters
            <ul>
              <li>Menu getter</li>
              <li>Data getter</li>
            </ul>
          </li>
          <li>
            Structurers
            <ul>
              <li>Foreach structurer</li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
    <h3>Shortcodes</h3>

    <h4>Getters</h4>
    <h5>Menu getter</h5>
    <p>
      Menu getter Menu shortcode is shown below.
    </p>
    <xmp>

      <div class="f-multi-level-dropdown">
        <ul>
          [sc1-g-menu]
          [twig]
          <li>
            <a href="[link]">
              [name]
            </a>
            <span class="toggle">
              <a href="#">+</a>
              <ul>
                [inner_twig]
              </ul>
            </span>
          </li>
          [/twig]
          [leaf]
          <li>
            <a href="[link]">
              [name]
            </a>
          </li>
          [/leaf]
          [/sc1-g-menu]
        </ul>
      </div>
    </xmp>
    <h5>Data getter</h5>
    <p>
      Data getter shortcode is shown below.
    </p>
    <xmp>
      [sc1-g-data]code/w3.css[/sc1-g-data]
    </xmp>
    <h4>Structurers</h4>
    <h5>Foreach structurer</h5>
    <p>
      Foreach structurer shortcode is shown below.
    </p>
    <xmp>
      <ul>
        [sc1-s-foreach type=`foreach` var=`[g type=`foreach`]Book/Chapter 1[/g]` level=`1`]
        <li><b>Dialogue set</b>
          <ul>
            <li>
              <b>Neale:</b> [g type=`foreach`]Neale[/g]
            </li>
            <li>
              <b>God:</b> [g type=`foreach`]God[/g]
            </li>
          </ul>
        </li>
        [/sc1-s-foreach type=`foreach` var=`` level=`1`]
      </ul>
    </xmp>


    <br>

  </div>
  <br>
  <!-- End Middle Column -->
</div>
<!-- Right Column -->
<div class="w3-col m2">
  <br>
  <!-- End Right Column -->
</div>


@include('includes.base-dom/3-wrap-div-script')