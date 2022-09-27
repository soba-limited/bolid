import { apiHost } from '@/lib/constants';
import styles from '@/styles/components/createPresent.module.scss'
import axios from 'axios';
import { createRef, useCallback, useRef } from 'react';

const CreatePresent = () => {
  const imageRef = useRef(null)
  const txtRefs = useRef([])
  const txtInput = ['title', 'name', 'limit']
  txtInput.forEach((_, i) => {
    txtRefs.current[i] = createRef()
  })

  const onPostForm = useCallback(async(data) => {
    try {
      const params = new FormData();
      Object.keys(data).forEach(function(key) {
        params.append(key, this[key])
      }, data)

      const resImage = await axios.post(`${apiHost}/api/liondor/present/store`, params, {
        headers: {
          'Content-Type': 'multipart/form-data',
        },
      })

      const resText = await axios.post(`${apiHost}/api/liondor/present/store`, {
        title: txtRefs.current[0].current.value,
        name: txtRefs.current[1].current.value,
        limit: txtRefs.current[2].current.value
      })

      console.log(resImage)
      console.log(resText)
    } catch(err) {
      console.log(err)
    }
  }, [])

  const onSubmitHandler = useCallback((e) => {
    e.preventDefault()
    onPostForm({
      file: imageRef.current.files[0],
    })
  }, [onPostForm])

  return (
    <section className={styles.createSection}>
      <form onSubmit={onSubmitHandler}>
        <input type="file" accept="image/*" ref={imageRef} />
        <input type="text" ref={txtRefs.current[0]} />
        <input type="text" ref={txtRefs.current[1]} />
        <input type="text" ref={txtRefs.current[2]} />
        <button>新規作成</button>
      </form>
    </section>
  );
}

export default CreatePresent;