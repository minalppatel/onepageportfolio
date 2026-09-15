<!-- Project Detail Modal -->
<div class="modal fade" id="projectDetailModal" tabindex="-1" aria-labelledby="modalProjectTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content glass-modal">
            <div class="modal-header border-0 pb-0">
                <div>
                    <span id="modalProjectCategory" class="badge bg-primary bg-opacity-25 text-primary-light mb-1"></span>
                    <h4 class="modal-title fw-bold text-white" id="modalProjectTitle"></h4>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-3">
                <div class="rounded-4 overflow-hidden mb-4 border border-secondary border-opacity-25" style="max-height: 380px;">
                    <img id="modalProjectImage" src="" alt="" class="w-100 h-100 object-fit-cover">
                </div>

                <div class="mb-4">
                    <h6 class="text-white fw-bold">Overview</h6>
                    <p id="modalProjectDescription" class="text-muted"></p>
                </div>

                <div class="mb-4">
                    <h6 class="text-white fw-bold">Key Architectural Highlights</h6>
                    <ul id="modalProjectHighlights" class="list-unstyled ps-1"></ul>
                </div>

                <div class="mb-4">
                    <h6 class="text-white fw-bold mb-2">Technologies &amp; Libraries</h6>
                    <div id="modalProjectTags" class="d-flex flex-wrap gap-1"></div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-0">
                <a id="modalGithubLink" href="#" target="_blank" rel="noopener" class="btn btn-glass btn-sm">
                    <i class="bi bi-github me-1"></i> Source Code
                </a>
                <a id="modalLiveLink" href="#" target="_blank" rel="noopener" class="btn btn-primary-gradient btn-sm">
                    <i class="bi bi-box-arrow-up-right me-1"></i> Live Application
                </a>
            </div>
        </div>
    </div>
</div>
