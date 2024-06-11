import React, { useState } from 'react';
import Filter from './Filter';
import ToDoList from './ToDoList';
import NewTask from './NewTask';

const App = () => {
  const [tasks, setTasks] = useState([]);
  const [hideCompleted, setHideCompleted] = useState(false);

  const addTask = (task) => {
    setTasks([...tasks, { id: Date.now(), text: task, completed: false }]);
  };

  const toggleTask = (id) => {
    setTasks(
      tasks.map((task) =>
        task.id === id ? { ...task, completed: !task.completed } : task
      )
    );
  };

  const toggleHideCompleted = () => {
    setHideCompleted(!hideCompleted);
  };

  const visibleTasks = hideCompleted
    ? tasks.filter((task) => !task.completed)
    : tasks;

  return (
    <div style={{ maxWidth: '400px', margin: '0 auto', textAlign: 'center' }}>
      <h1>Lista To-Do</h1>
      <Filter hideCompleted={hideCompleted} toggleHideCompleted={toggleHideCompleted} />
      <ToDoList tasks={visibleTasks} toggleTask={toggleTask} />
      <NewTask addTask={addTask} />
    </div>
  );
};

export default App;
