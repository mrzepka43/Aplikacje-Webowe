import React, { useState } from 'react';

const NewTask = ({ addTask }) => {
  const [newTask, setNewTask] = useState('');

  const handleSubmit = (e) => {
    e.preventDefault();
    if (newTask.trim()) {
      addTask(newTask);
      setNewTask('');
    }
  };

  return (
    <form onSubmit={handleSubmit} style={{ display: 'flex', justifyContent: 'center', marginTop: '20px' }}>
      <input
        type="text"
        value={newTask}
        onChange={(e) => setNewTask(e.target.value)}
        placeholder="Nowe zadanie"
        style={{ padding: '5px', marginRight: '10px', fontSize: '14px' }}
      />
      <button type="submit" style={{ padding: '5px 10px', fontSize: '14px' }}>Dodaj</button>
    </form>
  );
};

export default NewTask;
