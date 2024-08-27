<div id="cakephp_app_status"></div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        fetch('<?= $this->Url->build(['controller' => 'Heartbeat']) ?>')
            .then(function(response) {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text();
            })
            .then(function(data) {
                document.getElementById('cakephp_app_status').innerHTML = data;
            })
            .catch(function() {
                document.getElementById('cakephp_app_status').textContent = 'Error: Unable to retrieve heartbeat status.';
            });
    });
</script>
