// Main JavaScript file to import all components and utilities
import './bootstrap';
import './components/navbar';
import './components/modal';
import './components/dashboard';
import './components/inventory';
import { fetchData } from './utils/api';
import { formatDate } from './utils/helpers';
import { showNotification } from './utils/notifications';

// Example usage of utilities
window.addEventListener('load', () => {
    console.log('App loaded.');

    // Example API call
    fetchData('/some-endpoint')
        .then(data => console.log(data))
        .catch(error => showNotification('Error fetching data', 'error'));
});
