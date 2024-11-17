import React from 'react';
import { Link } from 'react-router-dom';

const Navbar: React.FC = () => {
    return (
        <nav className="bg-blue-600 p-4">
            <div className="container mx-auto flex space-x-4">
                <Link to="/" className="text-white hover:text-blue-200">
                    Home
                </Link>
                <Link to="/modules" className="text-white hover:text-blue-200">
                    Modules
                </Link>
            </div>
        </nav>
    );
};

export default Navbar;
