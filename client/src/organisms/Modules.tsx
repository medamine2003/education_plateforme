import React from 'react';
import { useGetModulesQuery } from '../../src/api/endpoints/modulesSlice';

interface Module {
  id: number;
  title: string;
  description: string;
  creation_date: string;
}

const Modules: React.FC = () => {
  const { data, isLoading } = useGetModulesQuery();

  if (isLoading) return <p>Is Loading ...</p>;

  const modules: Module[] = Array.isArray(data) ? data : data?.modules || [];

  if (modules.length === 0) return <p>No modules available</p>;

  return (
    <div className="flex flex-col items-center justify-center min-h-screen bg-gray-100">
      <h1 className="text-4xl font-bold">Modules</h1>
      <div className="mt-6 space-y-4">
        {modules.map((module) => (
          <div key={module.id} className="p-4 bg-white shadow rounded-lg w-1/2">
            <h2 className="text-2xl font-semibold">{module.title}</h2>
            <p className="mt-2 text-gray-600">{module.description}</p>
            <p className="mt-2 text-sm text-gray-500">Created on: {new Date(module.creation_date).toLocaleDateString()}</p>
          </div>
        ))}
      </div>
    </div>
  );
};

export default Modules;
