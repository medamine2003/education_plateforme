import React from 'react';
import LoginSection from '../organisms/LoginSection';
import Navbar from '../organisms/Navbar';


const LoginTemplate: React.FC = () => {
    return (
        <div className="min-h-screen flex flex-col lg:flex-row">
            <Navbar/>
             <div className="flex-1 flex items-center justify-center p-6 bg-gray-100">
                
                <LoginSection  />
            </div>
            <div className="flex-1 hidden lg:flex items-center justify-center bg-blue-600 text-white p-12">
                <div className="max-w-md text-center">
                    <h1 className="text-4xl font-bold mb-4">Bienvenue sur notre plateforme</h1>
                    <p className="text-lg">
                        Connectez-vous pour accéder à une expérience personnalisée et profiter de toutes les fonctionnalités de notre site.
                    </p>
                </div>
            </div>
            
          
           
        </div>
    );
};

export default LoginTemplate;
