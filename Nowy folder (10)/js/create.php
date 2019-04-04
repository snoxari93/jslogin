<body>
<div class="container">
    <div class="row">
        <h3>Nowy student</h3>
    </div>
    <form class="form-horizontal" action="create.php" method="post">
        <div class="form-group">
            <label class=" col-sm-1 control-label">Indeks</label>
            <div class="col-sm-5">
                <input name="indeks" type="text" class="form-control" placeholder="wpisz indeks studenta" value="">
            </div>
        </div>
        <div class="form-group">
            <label class=" col-sm-1 control-label">Imię</label>
            <div class="col-sm-5">
                <input name="imie" type="text" class="form-control" placeholder="wpisz imię studenta" value="">
            </div>
        </div>
        <div class="form-group">
            <label class=" col-sm-1 control-label">Nazwisko</label>
            <div class="col-sm-5">
                <input name="nazwisko" type="text" class="form-control" placeholder="wpisz nazwisko studenta" value="">
            </div>
        </div>
        <div class="form-group">
            <label class=" col-sm-1 control-label">E-mail</label>
            <div class="col-sm-5">
                <input name="email" type="text" class="form-control" placeholder="wpisz e-mail studenta" value="">
            </div>
        </div>
        <div class="form-group">
            <label class=" col-sm-1 control-label">Telefon</label>
            <div class="col-sm-5">
                <input name="mobile" type="text" class="form-control" placeholder="wpisz telefon mobile studenta" value="">
            </div>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-success">Create</button>
            <a class="btn" href="index.php">Back</a>
        </div>
    </form>
</div> <!-- /container -->
</body>