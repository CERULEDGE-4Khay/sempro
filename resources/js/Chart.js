function getStatistics() {
    return fetch('/api/statistics')
        .then(response => response.json())
        .then(data => {
            return data;
        })
        .catch(error => console.error('Error:', error));
}
