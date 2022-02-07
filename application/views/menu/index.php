<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
<link rel="stylesheet" href="<?= base_url('assets/plugins/menu-editor/') ?>bootstrap-iconpicker/css/bootstrap-iconpicker.min.css">

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<!-- /.col-md-6 -->
			<div class="col-lg-6">
				<div class="card card-primary card-outline">
					<div class="card-header">
						<h5 class="m-0">Menu</h5>
					</div>
					<div class="card-body">
						<form id="frmEdit" class="form-horizontal">
							<div class="form-group">
								<label for="text">Text</label>
								<div class="input-group">
									<input type="text" class="form-control item-menu" name="text" id="text" placeholder="Text">
									<div class="input-group-append">
										<button type="button" id="myEditor_icon" class="btn btn-outline-secondary"></button>
									</div>
								</div>
								<input type="hidden" name="icon" class="item-menu">
							</div>
							<div class="form-group">
								<label for="href">URL</label>
								<input type="text" class="form-control item-menu" id="href" name="href" placeholder="URL">
							</div>
							<div class="form-group">
								<label for="target">Target</label>
								<select name="target" id="target" class="form-control item-menu">
									<option value="_self">Self</option>
									<option value="_blank">Blank</option>
									<option value="_top">Top</option>
								</select>
							</div>
							<div class="form-group">
								<label for="title">Tooltip</label>
								<input type="text" name="title" class="form-control item-menu" id="title" placeholder="Tooltip">
							</div>
						</form>
					</div>
					<div class="card-footer">
						<div class="float-right">
							<button type="button" id="btnUpdate" class="btn btn-primary"><i class="fas fa-sync-alt"></i> Update</button>
							<button type="button" id="btnAdd" class="btn btn-success"><i class="fas fa-plus"></i> Add</button>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card card-primary card-outline">
					<div class="card-header">
						<h5 class="m-0">Menu List</h5>
					</div>
					<div class="card-body">
						<ul id="myEditor" class="sortableLists list-group">
						</ul>
					</div>
					<div class="card-footer">
						<div class="float-right">
							<button type="button" id="btnSave" class="btn btn-success"><i class="fas fa-plus"></i> Save</button>
						</div>
					</div>
				</div>
			</div>
			<!-- /.col-md-6 -->
		</div>
		<!-- /.row -->
	</div><!-- /.container-fluid -->
</div>

<!-- Scripts -->
<!-- (Recommended) Just before the closing body tag </body> -->
<!-- <script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script> -->
<script type="text/javascript" src="<?= base_url('assets/plugins/menu-editor/') ?>bootstrap-iconpicker/js/iconset/fontawesome5-3-1.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/plugins/menu-editor/') ?>bootstrap-iconpicker/js/bootstrap-iconpicker.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/plugins/menu-editor/') ?>jquery-menu-editor.min.js"></script>

<script>
	$(function() {
		// icon picker options
		var iconPickerOptions = {
			searchText: "Buscar...",
			labelHeader: "{0}/{1}"
		};
		// sortable list options
		var sortableListOptions = {
			placeholderCss: {
				'background-color': "#cccccc"
			}
		};
		var editor = new MenuEditor('myEditor', {
			listOptions: sortableListOptions,
			iconPicker: iconPickerOptions,
			maxLevel: 2 // (Optional) Default is -1 (no level limit)
			// Valid levels are from [0, 1, 2, 3,...N]
		});
		editor.setForm($('#frmEdit'));
		editor.setUpdateButton($('#btnUpdate'));
		//Calling the update method
		$("#btnUpdate").click(function() {
			editor.update();
		});
		// Calling the add method
		$('#btnAdd').click(function() {
			editor.add();
		});
		$('#btnSave').click(function() {
			console.log(editor.getString());
		});
	});
</script>
