// Utility functions for API interactions
const apiUrl = '/api'; // Base URL for API requests

const fetchData = async (endpoint) => {
    try {
        const response = await fetch(`${apiUrl}${endpoint}`);
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return await response.json();
    } catch (error) {
        console.error('Fetch error:', error);
    }
};

// Export the function
export { fetchData };
