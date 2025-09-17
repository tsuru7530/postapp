import React from 'react';
import ReactDOM from 'react-dom/client';

function Example() {
    return <h1>Hello from React!</h1>;
}

const el = document.getElementById('react-root');
if (el) {
    ReactDOM.createRoot(el).render(<Example />);
}