document.getElementById('filter-btn').addEventListener('click', () => {
    const version = document.getElementById('version').value;
    const javaVersion = document.getElementById('java_version').value;

    fetch(`/server/get_plugins.php?version=${version}&java_version=${javaVersion}`)
        .then(response => response.json())
        .then(data => {
            const list = document.getElementById('plugins-list');
            list.innerHTML = data.map(plugin => `
                <div class="plugin">
                    <h3>${plugin.name}</h3>
                    <p>${plugin.description}</p>
                    <a href="${plugin.download_url}" target="_blank">Download</a>
                </div>
            `).join('');
        });
});
