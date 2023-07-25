<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="toastInfo" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">Info</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            {{$slot}}
        </div>
    </div>
</div>

<script>
    const toastInfo = document.getElementById('toastInfo')
    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastInfo)
    toastBootstrap.show()

</script>