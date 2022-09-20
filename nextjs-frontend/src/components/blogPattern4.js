import styles from '@/styles/components/blogPattern4.module.scss'
import { BlogColumn1, BlogColumn3, BlogColumn4 } from '@/components'

const BlogPattern4 = ({mode2 = false}) => {
  return (
    <>
      <div className={`${styles.block} ${mode2 ? '' : styles.mbNone}`}>
        <BlogColumn1 />
        <BlogColumn3 />
      </div>
      {mode2 ? <BlogColumn4 /> : ''}
    </>
  );
}

export default BlogPattern4;