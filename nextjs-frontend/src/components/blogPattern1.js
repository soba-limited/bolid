import styles from '@/styles/components/blogPattern1.module.scss'
import { BlogColumn3, BlogPickup, BlogScrollBox } from '@/components';

const BlogPattern1 = ({column3None}) => {
  return (
    <>
      <article className={`${styles.stickyArea} ${column3None ? styles.mbNone : ''}`}>
        <BlogPickup />
        <BlogScrollBox />
      </article>

      {column3None ? '' : <BlogColumn3 />}
    </>
  );
}

export default BlogPattern1;