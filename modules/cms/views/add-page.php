<input type="hidden" id="all-methods" value='<?= json_encode($this->ki_theme->modules_and_pages()) ?>'>
<style>
    .checkbox-wrapper li,
    .radio-wrapper li {
        max-width: 187px !important;
        padding: 9px !important
    }
</style>
<form class="row " method="post" id="page_form">
    <div class="col-md-7">
        <div class="{card_class}">
            <div class="card-header">
                <!--begin::Title-->
                <h3 class="card-title">
                    Add New Page
                </h3>
                <!--end::Title-->
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input type="text" name="page_name" class="form-control" placeholder="Enter Page Name">
                </div>
                <div class="form-group all-div mt-2">
                    <input type="text" name="link" placeholder="Enter Slug" class="form-control" autocomplete="off">
                </div>
            </div>

        </div>
    </div>
    <div class="col-md-5">
        <div class="{card_class} main-card">
            <div class="card-header">
                {publish_button}
            </div>
            <div class="card-body">
                <div class="form-selectgroup">
                    <label class="form-selectgroup-item">
                        <input type="radio" value="content" name="page_type" checked class="page_type form-selectgroup-input">
                        <span class="form-selectgroup-label">
                            <i class="fa fa-sliders"></i><span>Content</span></span>
                    </label>
                    <label class="form-selectgroup-item">
                        <input type="radio" value="link" name="page_type" class="page_type form-selectgroup-input">
                        <span class="form-selectgroup-label">
                            <i class="fa fa-eye-slash"></i><span>Custom Link</span></span>
                    </label>
                </div>

                <!--begin::Check-->
                <div class="form-check form-check-custom form-check-solid form-check-success form-switch mt-3">
                    <input class="form-check-input w-60px h-30px" type="checkbox" name="isMenu"
                        id="kt_builder_sidebar_fixed_desktop1" checked>
                    <!--begin::Label-->
                    <label class="form-check-label text-gray-700 fw-bold fs-3 mx-2"
                        for="kt_builder_sidebar_fixed_desktop1">List in Menu</label>
                    <!--end::Label-->
                </div>
                <!--end::Check-->
                <!--begin::Check-->
                <div class="form-check form-check-custom form-check-solid form-check-success form-switch ">
                    <input class="form-check-input w-60px h-30px" type="checkbox" name="redirection"
                        id="kt_builder_sidebar_fixed_desktop">
                    <!--begin::Label-->
                    <label class="form-check-label text-gray-700 fw-bold fs-3 mx-2"
                        for="kt_builder_sidebar_fixed_desktop">Redirect A
                        New Page</label>
                    <!--end::Label-->
                </div>
                <!--end::Check-->
            </div>
        </div>

    </div>
</form>