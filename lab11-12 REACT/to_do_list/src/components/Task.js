import React from 'react';

const Task = ({ task, toggleTask }) => {
  return (
    <li style={{ display: 'flex', alignItems: 'center', margin: '5px 0' }}>
      <label style={{ textDecoration: task.completed ? 'line-through' : 'none' }}>
        <input
          type="checkbox"
          checked={task.completed}
          onChange={() => toggleTask(task.id)}
        />
        {task.text}
      </label>
    </li>
  );
};

export default Task;
