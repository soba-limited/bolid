import { apiHost } from '@/lib/constants';
import styles from '@/styles/components/createPresent.module.scss'
import axios from 'axios';
import { createRef, useCallback, useRef } from 'react';

const CreatePresent = () => {
  const imageRef = useRef(null)
  const txtRefs = useRef([])
  const txtInput = [
    {name: 'title', type: 'text'},
    {name: 'offer', type: 'text'},
    {name: 'limit', type: 'date'},
  ]
  txtInput.forEach((_, i) => {
    txtRefs.current[i] = createRef()
  })

  const onPostForm = useCallback(async(data) => {
    try {
      const params = new FormData();
      Object.keys(data).forEach(function(key) {
        params.append(key, this[key])
      }, data)

      const res = await axios.post(`http://localhost:8000/api/liondor/present/store`, params, {
        headers: {
          'Content-Type': 'multipart/form-data',
        },
      })

      console.log(res)

    } catch(err) {
      console.log(err)
    }
  }, [])

  const onSubmitHandler = useCallback((e) => {
    e.preventDefault()
    onPostForm({
      file: imageRef.current.files[0],
      title: txtRefs.current[0].current.value,
      offer: txtRefs.current[1].current.value,
      limit: txtRefs.current[2].current.value,
    })
  }, [onPostForm])

  return (
    <section className={styles.createSection}>
      <form method="POST" onSubmit={onSubmitHandler}>
        <input type="file" accept="image/*" ref={imageRef} />
        {txtInput.map((input, index) => (
          <input type={input.type} name={input.name} ref={txtRefs.current[index]} key={index} />
        ))}
        <button>新規作成</button>
      </form>
    </section>
  );
}

export default CreatePresent;