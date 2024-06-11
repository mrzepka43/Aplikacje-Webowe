import React from 'react';

const Filter = ({ hideCompleted, toggleHideCompleted }) => {
  return (
    <div>
      <label>
        <input type="checkbox" checked={hideCompleted} onChange={toggleHideCompleted} />
        Ukryj ukończone
      </label>
    </div>
  );
};

export default Filter;
