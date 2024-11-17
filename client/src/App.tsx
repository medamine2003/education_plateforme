import React from 'react';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';
import LoginTemplate from './templates/LoginTemplate';
import Modules from './organisms/Modules';
// import Home from './pages/Home'; // Page d'accueil (vous devrez créer ce composant)
import ProtectedRoute from './routes/ProtectedRoute';
const App: React.FC = () => {
    return (
        <Router>
            <div className="App">
                <Routes>
                    <Route path="/" element={<LoginTemplate />} />
                     <Route path="/modules" element={<ProtectedRoute component={Modules} />} />
                   
                </Routes>
            </div>
        </Router>
    );
};

export default App;
