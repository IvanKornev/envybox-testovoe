const BASE_URL = 'http://localhost:80/api/feedback';

const add = async(form = {}) => {
  const options = {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json;charset=utf-8',
    },
    body: JSON.stringify(form),
  };
  const results = await fetch(BASE_URL, options).then((response) => (
    response.json()
  ));
  return results;
};

const feedback = {
  add,
};

export default feedback;
