<nav class="navbar navbar-default navbar-fixed-top-DELETED" role="navigation">
  <div class="navbar-header">

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
       <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
    </button> <a class="navbar-brand" href=".">rekolekcje</a>
  </div>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li {if $kontroler == 'miejsca' }class="active"{/if}>
        <a href="?kontroler=miejsca">miejsca</a>
      </li>
      <li {if $kontroler == 'organizatorzy' }class="active"{/if}>
        <a href="?kontroler=organizatorzy">organizatorzy</a>
      </li>
      <li {if $kontroler == 'nowe_wydarzenie' }class="active"{/if}>
        <a href="?kontroler=nowe_wydarzenie">dodaj wydarzenie</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li>
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input class="form-control" type="text" />
          </div>
          <button type="submit" class="btn btn-default">
            Submit
          </button>
        </form>
      </li>
    </ul>
  </div>

</nav>
