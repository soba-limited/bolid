import styles from '@/styles/components/blogScrollBox.module.scss'
import Image from 'next/image';
import Link from 'next/link';
import { BlogTxt } from '@/components'
import dummy3 from '@/images/cms/dummy3.png'

const BlogScrollBox = ({patternData}) => {
  const dataOdd = patternData?.l_post.filter((e, index) => {
    return index !== 0 && index % 2 === 1 && index < 8
  })
  const dataEven = patternData?.l_post.filter((e, index) => {
    return index !== 0 && index % 2 === 0 && index < 9
  })

  return (
    <div className={styles.scrollBox}>
      <div className={`${styles.scrollOdd} ${styles.scrollCont}`}>
        {dataOdd?.map((item) => (
          <Link href={`/post/show/${item.id}`} key={item.id}>
            <a className={styles.blogLink}>
              <div className={styles.imgBox}>
                <Image
                  src={dummy3}
                  alt=""
                  layout="responsive"
                  sizes="(min-width: 1340px) 312px, (min-width: 768px) 150px, 100vw"
                  priority
                />
              </div>
              <BlogTxt
                smallMb
                cat={item.l_category.parent_slug?.toUpperCase()}
                cat2={item.l_category.name}
                ttl={item.title}
                name={item.user.name}
                time={item.created_at}
              />
            </a>
          </Link>
        ))}
      </div>
      <div className={`${styles.scrollEven} ${styles.scrollCont}`}>
        {dataEven?.map((item) => (
          <Link href={`/post/show/${item.id}`} key={item.id}>
            <a className={styles.blogLink}>
              <div className={styles.imgBox}>
                <Image
                  src={dummy3}
                  alt=""
                  layout="responsive"
                  sizes="(min-width: 1340px) 312px, (min-width: 768px) 150px, 100vw"
                  priority
                />
              </div>
              <BlogTxt
                smallMb
                cat={item.l_category.parent_slug?.toUpperCase()}
                cat2={item.l_category.name}
                ttl={item.title}
                name={item.user.name}
                time={item.created_at}
              />
            </a>
          </Link>
        ))}
      </div>
    </div>
  );
}

export default BlogScrollBox;