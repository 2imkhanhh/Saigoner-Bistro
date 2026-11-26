<div class="modal fade" id="sbLightboxModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content border-0 bg-transparent">
            <div class="modal-body p-0 position-relative text-center">
                <button type="button"
                        class="btn btn-dark rounded-circle position-absolute top-0 end-0 m-3 z-3"
                        data-bs-dismiss="modal" aria-label="Luk"
                        style="width: 42px; height: 42px; background-color: rgba(58,49,46,0.9); border-color: rgba(255,235,204,0.3);">
                    <i class="bi bi-x-lg text-white"></i>
                </button>

                <button type="button" id="sbLightboxPrev"
                        class="btn btn-dark rounded-circle position-absolute top-50 start-0 translate-middle-y ms-2 ms-md-3 z-3"
                        aria-label="Forrige"
                        style="width: 44px; height: 44px; background-color: rgba(58,49,46,0.85); border-color: rgba(255,235,204,0.3);">
                    <i class="bi bi-chevron-left text-white"></i>
                </button>

                <img id="sbLightboxImage" src="" alt="Saigoner Bistro"
                     class="img-fluid rounded-4 shadow-lg"
                     style="max-height: 85vh; object-fit: contain; background: var(--sb-secondary);">

                <button type="button" id="sbLightboxNext"
                        class="btn btn-dark rounded-circle position-absolute top-50 end-0 translate-middle-y me-2 me-md-3 z-3"
                        aria-label="Næste"
                        style="width: 44px; height: 44px; background-color: rgba(58,49,46,0.85); border-color: rgba(255,235,204,0.3);">
                    <i class="bi bi-chevron-right text-white"></i>
                </button>

                <p id="sbLightboxCaption" class="small mt-2 mb-0 text-light"></p>
            </div>
        </div>
    </div>
</div>

