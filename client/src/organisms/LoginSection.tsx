import React from 'react';
import LoginForm from '../molecules/LoginForm';



const LoginSection: React.FC = () => {
    return (
        <section className="min-h-screen flex flex-col items-center justify-center bg-gray-100 p-6">
            <div className="w-full max-w-lg bg-white rounded-lg shadow-lg p-8">
                <h2 className="text-3xl font-bold text-center mb-6 text-blue-600">Bienvenue</h2>
                <p className="text-center text-gray-600 mb-8">Connectez-vous pour accéder à votre compte</p>
                <LoginForm  />
                <div className="text-center mt-4">
                    <p>
                        Pas encore de compte ? <a href="/signup" className="text-blue-500 hover:underline">S'inscrire</a>
                    </p>
                </div>
            </div>
        </section>
    );
};

export default LoginSection;
