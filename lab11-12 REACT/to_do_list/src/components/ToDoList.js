import React from 'react';
import Task from './Task';

const ToDoList = ({ tasks, toggleTask }) => {
  if (tasks.length === 0) {
    return <p>Brak zadań do wyświetlenia.</p>;
  }

  return (
    <ul style={{ listStyle: 'none', padding: 0 }}>
      {tasks.map((task) => (
        <Task key={task.id} task={task} toggleTask={toggleTask} />
      ))}
    </ul>
  );
};

export default ToDoList;
