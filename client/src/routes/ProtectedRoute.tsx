import React, { useEffect, useState } from 'react';
import { useNavigate } from 'react-router-dom';


interface ProtectedRouteProps {
  component: React.FC;
}

const ProtectedRoute: React.FC<ProtectedRouteProps> = ({ component: Component }) => {
  const navigate = useNavigate();
  const [isAuthenticated, setIsAuthenticated] = useState<boolean | null>(null);  

  useEffect(() => {
    
    const authToken = localStorage.getItem('authToken');
    if (authToken) {
      setIsAuthenticated(true);
    } else {
      setIsAuthenticated(false);
    }
  }, []);  

  
  if (isAuthenticated === null) {
    
    return null;
  }

  if (!isAuthenticated) {
    navigate('/');  
    return null;  
  }

  
  return <Component />;
};

export default ProtectedRoute;
